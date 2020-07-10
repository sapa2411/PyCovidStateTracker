#!/bin/bash
if [[ ! -f "tagsoup-1.2.1.jar" ]]
then
    wget  http://vrici.lojban.org/~cowan/XML/tagsoup/tagsoup-1.2.1.jar
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

wget ${array[0]} -O $ONE.html
wget "${array[1]}" -O $TWO.html

java -jar tagsoup-1.2.1.jar --files $ONE.html
java -jar tagsoup-1.2.1.jar --files $TWO.html

python scrape.py $ONE.xhtml $TWO.xhtml

rm one.html
rm one.xhtml
rm two.html
rm two.xhtml

UPDATE=$[$UPDATE+1]

sleep 1800

done
