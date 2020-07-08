# COVID-19-state-by-state-tracker
### Tracker dashboard that displays number of new deaths and cases in US by state, updates itself every 30 seconds.


Project makes use of LAMP stack and consists of two parts: 
>1 Web scraping.  Every 30 seconds shell script calling python file which uses `xml.dom.minidom` and `mysql.connector` library to download data. 

>2 Display. PHP, HTML and CSS is used to render scraped data to the screen. 
