<script type="text/javascript">
$(function(){
    
        $.ajax({
            type: "GET",
            url: "feed.php",
            dataType: "xml",
            complete : function(data, status) {
                var venue = data.responseXML;
                var appendHtml = "";
                $(venue).each(function(){
                    var name = $(this).find('name').text();
                    var address = $(this).find('address').text();
                    var city = $(this).find('city').text();
                    var state = $(this).find('state').text();
                    var checkins = $(this).find('checkins').text();
                    var herenow = $(this).find('herenow').text();
                    appendHtml += "<dt id='lieu'><a href='http://foursquare.com/venue/1526835'>"+name+"</a></dt><dd>"+address+"<br />"+zip+ +city+" ("+state+")</dd><dd>nombre de checks : "+checkins+"<br/>nombre de checks aujourd'hui : "+herenow+"</dd>"; 
                });
                $(venue).find("mayor").each(function(i, item) {
                    var firstname = $(item).find("firstname").text();
                    var lastname = $(item).find("lastname").text();
                    var photo = $(item).find("photo").text();
                    var id = $(item).find("user").find("id").text();
                    appendHtml += "<dt id='mayor'>Maire actuel des Champs Libres</dt><dd class='mayor'><a href='http://foursquare.com/user/-"+id+"'><img src='"+photo+"' alt='avatar' /></a><p>"+firstname+" "+lastname+"</p></dd>";
                });
                appendHtml += "<dt>Les derniers messages</dt>";
                $(venue).find("tip").each(function(i, item) {
                    var text = $(item).find("text").text();
                    var created = $(item).find("created").text();
                    var firstname = $(item).find("firstname").text();
                    var lastname = $(item).find("lastname").text();
                    var url = $(item).find("url").text();
                    var photo = $(item).find("photo").text();
                    var id = $(item).find("user").find("id").text();                
                    appendHtml += "<dd>de "+firstname+" "+lastname+" <a href='http://foursquare.com/user/-"+id+"'><img src='"+photo+"' alt='avatar' /></a></dd><dd>date : "+created+"</dd><dd>"+text+"</dd><dd>Liens associé : <a href="+url+">"+url+"</a></dd>";
                });
                $("#foursquare").append(appendHtml);
            }});
    });
	
	{
meta: {
code: 200
}
notifications: [
{
type: "notificationTray"
item: {
unreadCount: 0
}
}
]
response: {
venues: [
{
id: "4a43bcb7f964a520bba61fe3"
name: "Brooklyn Bridge"
contact: {
twitter: "nyc_dot"
facebook: "166279802886"
}
location: {
address: "Brooklyn Bridge"
lat: 40.705953265881305
lng: -73.99656772613525
distance: 723
postalCode: "10038"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1df941735"
name: "Pont"
pluralName: "Ponts"
shortName: "Pont"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/parks_outdoors/bridge_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 114438
usersCount: 63469
tipCount: 435
}
url: "http://www.nyc.gov/dot"
hereNow: {
count: 14
summary: "14 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 14
items: [ ]
}
]
}
storeId: ""
}
{
id: "4c263af6a852c9287537e66c"
name: "The Cinnamon Snail"
contact: {
phone: "+12016753755"
formattedPhone: "+1 201-675-3755"
twitter: "veganlunchtruck"
}
location: {
address: "Moving Target!"
lat: 40.705490470566275
lng: -74.00734397774536
distance: 870
postalCode: "10010"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1cb941735"
name: "Camion de restauration"
pluralName: "Camions de restauration"
shortName: "Camion de restauration"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/streetfood_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 6350
usersCount: 2161
tipCount: 73
}
url: "http://www.cinnamonsnail.com"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/the-cinnamon-snail-new-york-ny/4c263af6a852c9287537e66c/menu"
mobileUrl: "https://foursquare.com/v/4c263af6a852c9287537e66c/device_menu"
}
hereNow: {
count: 13
summary: "13 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 13
items: [ ]
}
]
}
venuePage: {
id: "39211699"
}
}
{
id: "4b6b5abff964a520fb022ce3"
name: "National September 11 Memorial & Museum"
contact: {
phone: "+12123128800"
formattedPhone: "+1 212-312-8800"
twitter: "sept11memorial"
}
location: {
address: "1 Albany St"
crossStreet: "btwn West & Greenwich St"
lat: 40.7114673282201
lng: -74.01328325271606
distance: 1698
postalCode: "10006"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4deefb944765f83613cdba6e"
name: "Site historique"
pluralName: "Sites historiques"
shortName: "Site historique"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/arts_entertainment/historicsite_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 75569
usersCount: 58897
tipCount: 367
}
url: "http://www.911memorial.org"
hereNow: {
count: 11
summary: "11 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 11
items: [ ]
}
]
}
venuePage: {
id: "83931588"
}
storeId: ""
}
{
id: "42daf100f964a52035261fe3"
name: "Battery Park"
contact: {
phone: "+12123443491"
formattedPhone: "+1 212-344-3491"
twitter: "nycparks"
}
location: {
address: "Battery Pl."
crossStreet: "at State St."
lat: 40.703578337307555
lng: -74.01618003845215
distance: 1422
postalCode: "10004"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d163941735"
name: "Parc"
pluralName: "Parcs"
shortName: "Parc"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/parks_outdoors/park_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 37417
usersCount: 29385
tipCount: 129
}
url: "http://nyc.gov/parks"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/battery-park/42daf100f964a52035261fe3/menu"
mobileUrl: "https://foursquare.com/v/42daf100f964a52035261fe3/device_menu"
}
hereNow: {
count: 10
summary: "10 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 10
items: [ ]
}
]
}
}
{
id: "4165d880f964a5207e1d1fe3"
name: "Staten Island Ferry - Whitehall Terminal"
contact: {
phone: "+17188152628"
formattedPhone: "+1 718-815-2628"
twitter: "nyc_dot"
facebook: "166279802886"
}
location: {
address: "4 South St"
crossStreet: "South Ferry"
lat: 40.70145732419213
lng: -74.01321428847186
distance: 1126
postalCode: "10004"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4e74f6cabd41c4836eac4c31"
name: "Embarcadère"
pluralName: "Embarcadère"
shortName: "Embarcadère"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/travel/ferry_pier_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 90888
usersCount: 37485
tipCount: 313
}
url: "http://www.nyc.gov/dot"
hereNow: {
count: 10
summary: "10 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 10
items: [ ]
}
]
}
storeId: ""
}
{
id: "5047c785e4b0bcc0f416cdb3"
name: "GRK"
contact: {
phone: "+12123852010"
formattedPhone: "+1 212-385-2010"
twitter: "grkfresh"
}
location: {
address: "111 Fulton St"
crossStreet: "at Dutch St."
lat: 40.70987103336887
lng: -74.007068533519
distance: 1250
postalCode: "10038"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d10e941735"
name: "Restaurant grec"
pluralName: "Restaurants grecs"
shortName: "Grecque"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/greek_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 4818
usersCount: 2137
tipCount: 55
}
url: "http://grkfresh.com"
delivery: {
url: "http://www.seamless.com/food-delivery/restaurant.25290.r?a=1026&utm_source=Foursquare&utm_medium=affiliate&utm_campaign=SeamlessOrderDeliveryLink"
provider: {
name: "seamless"
}
}
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/grk-new-york-ny/5047c785e4b0bcc0f416cdb3/menu"
mobileUrl: "https://foursquare.com/v/5047c785e4b0bcc0f416cdb3/device_menu"
}
hereNow: {
count: 9
summary: "9 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 9
items: [ ]
}
]
}
venuePage: {
id: "45901352"
}
storeId: ""
}
{
id: "4adccf54f964a520103021e3"
name: "Just Salad"
contact: {
phone: "+12122441111"
formattedPhone: "+1 212-244-1111"
twitter: "justsalad"
}
location: {
address: "100 Maiden Ln"
crossStreet: "btw Pearl & Gold"
lat: 40.70699664566085
lng: -74.00712017934165
distance: 983
postalCode: "10079"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1bd941735"
name: "Bar à salades"
pluralName: "Bar à salade"
shortName: "Salade"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/salad_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 5698
usersCount: 1391
tipCount: 27
}
url: "http://www.justsalad.com"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/just-salad/4adccf54f964a520103021e3/menu"
mobileUrl: "https://foursquare.com/v/4adccf54f964a520103021e3/device_menu"
}
hereNow: {
count: 8
summary: "8 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 8
items: [ ]
}
]
}
}
{
id: "531dbdc9498e53615355afb4"
name: "RAMEN.Co NYC"
contact: {
phone: "+12127422150"
formattedPhone: "+1 212-742-2150"
twitter: "ramenconyc"
facebook: "594761687274611"
}
location: {
address: "100 Maiden Ln"
crossStreet: "Pearl St"
lat: 40.70668524734055
lng: -74.0068781375885
distance: 943
postalCode: "10038"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1d1941735"
name: "Restaurant de ramen ou de nouilles chinoises"
pluralName: "Restaurant de ramen ou de nouilles chinoises"
shortName: "Ramen/Nouilles"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/ramen_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 444
usersCount: 342
tipCount: 8
}
hereNow: {
count: 8
summary: "8 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 8
items: [ ]
}
]
}
venuePage: {
id: "81082607"
}
storeId: ""
}
{
id: "4a7ef289f964a52058f21fe3"
name: "Dig Inn Seasonal Market"
contact: {
phone: "+12127851110"
formattedPhone: "+1 212-785-1110"
}
location: {
address: "80 Pine St"
crossStreet: "at Pearl St"
lat: 40.70610935056218
lng: -74.00734971616252
distance: 920
postalCode: "10005"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d14e941735"
name: "Restaurant américain"
pluralName: "Restaurants américains"
shortName: "Américaine"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/default_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 6059
usersCount: 1911
tipCount: 44
}
delivery: {
url: "http://www.seamless.com/food-delivery/restaurant.5698.r?a=1026&utm_source=Foursquare&utm_medium=affiliate&utm_campaign=SeamlessOrderDeliveryLink"
provider: {
name: "seamless"
}
}
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/dig-inn-seasonal-market/4a7ef289f964a52058f21fe3/menu"
mobileUrl: "https://foursquare.com/v/4a7ef289f964a52058f21fe3/device_menu"
}
hereNow: {
count: 8
summary: "8 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 8
items: [ ]
}
]
}
storeId: ""
}
{
id: "52f9159a11d28d6897790ca6"
name: "Tres Carnes"
contact: {
twitter: "trescarnes"
}
location: {
address: "101 Maiden Ln"
crossStreet: "at Pearl St"
lat: 40.70689723293674
lng: -74.00681030419653
distance: 959
postalCode: "10038"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1c1941735"
name: "Restaurant mexicain"
pluralName: "Restaurants mexicains"
shortName: "Mexicaine"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/mexican_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 583
usersCount: 375
tipCount: 11
}
hereNow: {
count: 8
summary: "8 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 8
items: [ ]
}
]
}
}
{
id: "51e42550498e9513a7463f3b"
name: "Calexico Cart"
contact: {
twitter: "calexiconyc"
}
location: {
address: "at Plymouth & Main St."
lat: 40.70402364937234
lng: -73.9907649725129
distance: 898
postalCode: "11201"
cc: "US"
city: "Brooklyn"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1cb941735"
name: "Camion de restauration"
pluralName: "Camions de restauration"
shortName: "Camion de restauration"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/streetfood_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 638
usersCount: 254
tipCount: 10
}
url: "http://www.calexico.net"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/calexico-cart/51e42550498e9513a7463f3b/menu"
mobileUrl: "https://foursquare.com/v/51e42550498e9513a7463f3b/device_menu"
}
hereNow: {
count: 7
summary: "7 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 7
items: [ ]
}
]
}
}
{
id: "51d35ee28bbdd6ddb1edf05a"
name: "WeWork Fulton Center"
contact: {
phone: "+18555939675"
formattedPhone: "+1 855-593-9675"
facebook: "330321486979917"
}
location: {
address: "222 Broadway"
crossStreet: "Fulton Street"
lat: 40.71117455762713
lng: -74.00858402252197
distance: 1439
postalCode: "10038"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d174941735"
name: "Espace de travail partagé"
pluralName: "Espaces de travail partagés"
shortName: "Espace de travail partagé"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/building/office_coworkingspace_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 3592
usersCount: 695
tipCount: 3
}
url: "http://wework.com"
hereNow: {
count: 7
summary: "7 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 7
items: [ ]
}
]
}
}
{
id: "4dcc5861887714552bd47b34"
name: "Brooklyn Roasting Company"
contact: {
phone: "+17185222664"
formattedPhone: "+1 718-522-2664"
twitter: "bklynroasting"
}
location: {
address: "25 Jay St"
crossStreet: "btwn Plymouth & John St"
lat: 40.70411988449319
lng: -73.98666160518577
distance: 1215
postalCode: "11201"
cc: "US"
city: "Brooklyn"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1e0931735"
name: "Café"
pluralName: "Cafés"
shortName: "Café"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/coffeeshop_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 17627
usersCount: 4321
tipCount: 112
}
url: "http://www.brooklynroasting.com"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/brooklyn-roasting-company-brooklyn-ny/4dcc5861887714552bd47b34/menu"
mobileUrl: "https://foursquare.com/v/4dcc5861887714552bd47b34/device_menu"
}
hereNow: {
count: 7
summary: "7 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 7
items: [ ]
}
]
}
venuePage: {
id: "48722666"
}
storeId: ""
}
{
id: "50ba9119e4b071a4bae6dc10"
name: "Nish Nūsh"
contact: {
phone: "+12129641318"
formattedPhone: "+1 212-964-1318"
}
location: {
address: "88 Reade St"
crossStreet: "Church St"
lat: 40.71554971735815
lng: -74.00760769844055
distance: 1846
postalCode: "10007"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d10b941735"
name: "Restaurant falafel"
pluralName: "Restaurants falafel"
shortName: "Falafel"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/falafel_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 1737
usersCount: 959
tipCount: 41
}
url: "http://www.nishnushnyc.com"
delivery: {
url: "http://www.grubhub.com/order_redir.jsp?custId=274067&affId=1131"
provider: {
name: "grubhub"
}
}
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/nish-n%C5%ABsh/50ba9119e4b071a4bae6dc10/menu"
mobileUrl: "https://foursquare.com/v/50ba9119e4b071a4bae6dc10/device_menu"
}
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
}
{
id: "49c00b19f964a5203e551fe3"
name: "Foragers Market"
contact: {
phone: "+17188018400"
formattedPhone: "+1 718-801-8400"
twitter: "foragersmarket"
}
location: {
address: "56 Adams St"
crossStreet: "at Front St."
lat: 40.702426168537755
lng: -73.98877929802003
distance: 984
postalCode: "11201"
cc: "US"
city: "Brooklyn"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1c5941735"
name: "Sandwicherie"
pluralName: "Sandwicheries"
shortName: "Sandwiches"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/sandwiches_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 9535
usersCount: 2133
tipCount: 61
}
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/foragers-market/49c00b19f964a5203e551fe3/menu"
mobileUrl: "https://foursquare.com/v/49c00b19f964a5203e551fe3/device_menu"
}
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
}
{
id: "500d3cede4b0f6804faa90a8"
name: "Blue Spoon Coffee Co."
contact: {
phone: "+12128098880"
formattedPhone: "+1 212-809-8880"
twitter: "bluespoonnyc"
}
location: {
address: "90 William St"
crossStreet: "at Platt St"
lat: 40.70830245712893
lng: -74.00803832497229
distance: 1146
postalCode: "10038"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1e0931735"
name: "Café"
pluralName: "Cafés"
shortName: "Café"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/coffeeshop_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 4347
usersCount: 973
tipCount: 52
}
url: "http://www.bluespooncoffee.com"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/blue-spoon-coffee-co/500d3cede4b0f6804faa90a8/menu"
mobileUrl: "https://foursquare.com/v/500d3cede4b0f6804faa90a8/device_menu"
}
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
}
{
id: "49f201def964a520cc691fe3"
name: "New York Sports Club"
contact: {
phone: "+12124824800"
formattedPhone: "+1 212-482-4800"
}
location: {
address: "30 Wall St"
crossStreet: "at Broad St"
lat: 40.706941941133984
lng: -74.01032219310662
distance: 1164
postalCode: "10005"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d176941735"
name: "Salle de sports"
pluralName: "Salles de sport"
shortName: "Salle de sports"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/building/gym_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 16504
usersCount: 1465
tipCount: 46
}
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
}
{
id: "4a807ab1f964a52067f51fe3"
name: "Chipotle Mexican Grill"
contact: {
phone: "+12123440941"
formattedPhone: "+1 212-344-0941"
twitter: "chipotletweets"
}
location: {
address: "2 Broadway"
crossStreet: "Broadway bet Beaver & Stone"
lat: 40.7042372264966
lng: -74.01304214116337
distance: 1197
postalCode: "10004"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1c1941735"
name: "Restaurant mexicain"
pluralName: "Restaurants mexicains"
shortName: "Mexicaine"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/mexican_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 8683
usersCount: 3449
tipCount: 48
}
url: "http://www.chipotle.com"
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
storeId: "476"
}
{
id: "4a737bf8f964a52091dc1fe3"
name: "MTA Subway - Manhattan Bridge (B/D/N/Q)"
contact: {
phone: "+17183301234"
formattedPhone: "+1 718-330-1234"
twitter: "nyctsubwayscoop"
}
location: {
address: "Manhattan Bridge"
crossStreet: "East River"
lat: 40.708588361482406
lng: -73.99103164672852
distance: 1219
postalCode: "11201"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1fd931735"
name: "Métro"
pluralName: "Métros"
shortName: "Métro"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/travel/subway_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 144073
usersCount: 8548
tipCount: 122
}
url: "http://www.mta.info"
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
}
{
id: "51e6af45498eecb6d76f0275"
name: "Planet Fitness Wall Street"
contact: { }
location: {
lat: 40.70580094589815
lng: -74.01348398560994
distance: 1308
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d176941735"
name: "Salle de sports"
pluralName: "Salles de sport"
shortName: "Salle de sports"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/building/gym_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 2295
usersCount: 306
tipCount: 8
}
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
}
{
id: "4eeb4c51775b1d4812e0261c"
name: "Shake Shack"
contact: {
phone: "+17183077590"
formattedPhone: "+1 718-307-7590"
}
location: {
address: "409 Fulton St"
crossStreet: "at Boerum Pl."
lat: 40.69220941641377
lng: -73.98874486417706
distance: 1286
postalCode: "11201"
cc: "US"
city: "Brooklyn"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d16c941735"
name: "Lieu servant des hamburgers"
pluralName: "Lieux servant des hamburgers"
shortName: "Hamburgers"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/burger_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 22933
usersCount: 11837
tipCount: 125
}
url: "http://www.shakeshack.com"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/shake-shack/4eeb4c51775b1d4812e0261c/menu"
mobileUrl: "https://foursquare.com/v/4eeb4c51775b1d4812e0261c/device_menu"
}
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
storeId: ""
}
{
id: "4b59b4e6f964a520e59328e3"
name: "St John's University"
contact: {
phone: "+12129624111"
formattedPhone: "+1 212-962-4111"
}
location: {
address: "101 Murray St"
crossStreet: "West St"
lat: 40.71518532289291
lng: -74.01264620176525
distance: 1999
postalCode: "10007"
cc: "US"
city: "New York"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d1ae941735"
name: "Université"
pluralName: "Universités"
shortName: "Université"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/education/default_"
suffix: ".png"
}
primary: true
}
]
verified: false
stats: {
checkinsCount: 3237
usersCount: 719
tipCount: 10
}
url: "http://www.stjohns.edu/campuses/manhattan"
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
}
{
id: "51dd7c69498ee00b70fa54b8"
name: "Atrium DUMBO"
contact: {
phone: "+17188581095"
formattedPhone: "+1 718-858-1095"
twitter: "atriumdumbo"
}
location: {
address: "15 Main St"
crossStreet: "btwn Water & Plymouth St."
lat: 40.703448
lng: -73.99086
distance: 861
postalCode: "11201"
cc: "US"
city: "Brooklyn"
state: "NY"
country: "États-Unis"
}
categories: [
{
id: "4bf58dd8d48988d14e941735"
name: "Restaurant américain"
pluralName: "Restaurants américains"
shortName: "Américaine"
icon: {
prefix: "https://ss1.4sqi.net/img/categories_v2/food/default_"
suffix: ".png"
}
primary: true
}
]
verified: true
stats: {
checkinsCount: 1342
usersCount: 984
tipCount: 33
}
url: "http://facebook.com/atriumdumbo"
menu: {
type: "Menu"
label: "Menu"
anchor: "Afficher le menu"
url: "https://foursquare.com/v/atrium-dumbo/51dd7c69498ee00b70fa54b8/menu"
mobileUrl: "https://foursquare.com/v/51dd7c69498ee00b70fa54b8/device_menu"
}
hereNow: {
count: 6
summary: "6 personnes sont ici"
groups: [
{
type: "others"
name: "Autres personnes ici"
count: 6
items: [ ]
}
]
}
venuePage: {
id: "73664264"
}
storeId: ""
}
]
}
}
</script>