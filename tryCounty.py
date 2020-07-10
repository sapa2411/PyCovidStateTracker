import sys
import xml.dom.minidom
import mysql.connector
from datetime import datetime


#parse second xhtml document
document2 = xml.dom.minidom.parse(sys.argv[1]) 

tableElements2 = document2.getElementsByTagName('table')
for tr in tableElements2[7].getElementsByTagName('tr')[2:-6]:
    data2 = []
    th = tr.getElementsByTagName('th')
    td = tr.getElementsByTagName('td')
    print(th[0].childNodes[0])
    if not td:
        continue
    #county = td[0].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','') 
    #if not county:
        
    #county = td[0].childNodes[0]
    #print(*county)   
    #(x,y,z,b) = county
    #   
    #print(x)
    #print(y)
    #print(z)
    #print(b)
    county = th[0].childNodes[0].nodeValue.replace(',','').replace('\n','').strip()
    

        #data2.append(y)

    c_cases = td[0].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','') 
    c_deaths = td[1].childNodes[0].nodeValue.replace(',','').replace('\n','').replace(' ','')  
    data2.append(county)
    data2.append(c_cases)
    data2.append(c_deaths)

    print(','.join(data2))

    #insert new values into table 
   # sql_c= 'INSERT INTO County(county_name, cases, deaths) VALUES(%s, %s, %s)'
    #cursor.execute(sql_c, (county,int(c_cases),int(c_deaths)))
   # mydb.commit()

#print(cursor.rowcount, "record inserted.")

#for tr in tableElements[0].getElementsByTagName('tr'):
#    data = []
#    for td in tr.getElementsByTagName('td'):
#        for node in td.childNodes:
#           if node.nodeType == node.TEXT_NODE:
#               if node.nodeValue != '\n':
#                   data.append(node.nodeValue.replace(',',''))
#   print(','.join(data))