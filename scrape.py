import sys
import xml.dom.minidom
import mysql.connector
from datetime import datetime

#get time of scrape to check for last of day update
now = datetime.now()
def end_of_day_update():
    nowTime = str(now.strftime("%H:%M"))
    return nowTime >= '23:00' and nowTime <= '23:59'


#connect to database
mydb = mysql.connector.connect(host='localhost', user ='root', password ='root')
cursor = mydb.cursor()



cursor.execute("USE covid_us") 
cursor.execute("DELETE FROM states")
cursor.execute("DELETE FROM total")
cursor.execute("DELETE FROM County")
if end_of_day_update():
    cursor.execute("DELETE FROM states_delta")
               

#parse xhtml document
document = xml.dom.minidom.parse(sys.argv[1])
#parse second xhtml document
document2 = xml.dom.minidom.parse(sys.argv[2]) 
tableElements = document.getElementsByTagName('table')

total_cases = tableElements[0].getElementsByTagName('tr')[1].getElementsByTagName('td')[1].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','')
total_deaths = tableElements[0].getElementsByTagName('tr')[1].getElementsByTagName('td')[3].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','')

sql_total = 'INSERT INTO total(cases, deaths) VALUES(%s,%s)'
cursor.execute(sql_total,(int(total_cases),int(total_deaths)))
mydb.commit()

for tr in tableElements[0].getElementsByTagName('tr')[2:-6]:
    data =[]
    td = tr.getElementsByTagName('td')
    
    if not td:
        continue
    state = td[0].childNodes[0].nodeValue.replace(',','').replace('\n','').strip()
    if not state:
        state = td[0].childNodes[1].childNodes[0].nodeValue.replace(',','').replace('\n','').strip()

    cases = td[1].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','')
    deaths = td[3].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','')
    data.append(state)
    data.append(cases)
    data.append(deaths)
    
    #print(','.join(data))
    
    #insert new values into table 
    sql1= 'INSERT INTO states(state_name, cases, deaths) VALUES(%s, %s, %s)'
    cursor.execute(sql1, (state,int(cases),int(deaths)))
    mydb.commit()
    
    #insert new values into helper table for last of day update
    if end_of_day_update():
        sql2= 'INSERT INTO states_delta(state_name, cases_delta, deaths_delta) VALUES(%s, %s, %s)'
        cursor.execute(sql2, (state,int(cases),int(deaths)))
        mydb.commit()

tableElements2 = document2.getElementsByTagName('table')
for tr in tableElements2[6].getElementsByTagName('tr')[2:-2]:
    data2 = []
    th = tr.getElementsByTagName('th')
    td = tr.getElementsByTagName('td')

    if not td:
        continue
    county = th[0].childNodes[0].childNodes[0].nodeValue.replace(',','').replace('\n','').strip()
    c_cases = td[0].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','') 
    c_deaths = td[1].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','')  
    data2.append(county)
    data2.append(c_cases)
    data2.append(c_deaths)

    #print(','.join(data2))

    #insert new values into table 
    sql_c= 'INSERT INTO County(county_name, cases, deaths) VALUES(%s, %s, %s)'
    cursor.execute(sql_c, (county,int(c_cases),int(c_deaths)))
    mydb.commit()

