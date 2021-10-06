#!/bin/bash
# https://www.worldometers.info/coronavirus/
# https://www.cnn.com/interactive/2020/health/coronavirus-us-maps-and-cases/
if [[ ! -f "tagsoup-1.2.1.jar" ]]
then
    curl  http://vrici.lojban.org/~cowan/XML/tagsoup/tagsoup-1.2.1.jar
fi

UPDATE="0"
while [ $UPDATE -lt 1800 ]
do

array=(`cat "$1"`) # Create array
    while IFS= read -r line # Read a line
    do
         array+=("$line")
    done < "$1"

ONE=one
TWO=two

curl ${array[0]} -o $ONE.html
curl "${array[1]}" -o $TWO.html

java -jar tagsoup-1.2.1.jar --files $ONE.html
java -jar tagsoup-1.2.1.jar --files $TWO.html

python3 scrape.py $ONE.xhtml $TWO.xhtml

rm one.html
rm one.xhtml
rm two.html
rm two.xhtml

UPDATE=$[$UPDATE+1]

sleep 1800

done
