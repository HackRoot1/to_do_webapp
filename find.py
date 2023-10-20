import phonenumbers
from phonenumbers import geocoder
from phonenumbers import carrier
import opencage
from opencage.geocoder import OpenCageGeocode
import folium


key = "544c9e1cf4314e4ca78d641c96a1399a" #Geocoder API Key need to paste here "your key" 
number = input("please giver your number: ")
new_number = phonenumbers.parse(number)
location = geocoder.description_for_number(new_number, "en")
print(location)

service_name = carrier.name_for_number(new_number,"en")
print(service_name)

geocoder = OpenCageGeocode(key)
query = str(location)
result = geocoder.geocode(query)
#print(result)

lat = result[0]['geometry']['lat']
lng = result[0]['geometry']['lng']

print(lat,lng)

my_map = folium.Map(location=[lat,lng], zoom_start=9)
folium.Marker([lat, lng], popup= location).add_to(my_map)

my_map.save("location.html")

print("location tracking completed")
print("Thank you")

# See our full Python tutorial:
# https://opencagedata.com/tutorials/geocode-in-python

from opencage.geocoder import OpenCageGeocode

OCG = OpenCageGeocode('544c9e1cf4314e4ca78d641c96a1399a')
results = OCG.reverse_geocode(14.666, 76.833)
print(results[0][formatted])
# Sirigedoddi, Gummagatta, India

results = OCG.geocode(u'Athens')
print(u'%f;%f;%s;%s' % (results[0]['geometry']['lat'],
                        results[0]['geometry']['lng'],
                        results[0]['components']['country_code'],
                        results[0]['annotations']['timezone']['name']))
# 37.983941;23.728305;gr;Europe/Athens

results = OCG.geocode(u'Athens, Texas', language='de')
print(results[0]['components']['country'])
# Vereinigte Staaten von Amerika