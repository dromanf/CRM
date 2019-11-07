<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "prueba";

//Creamos la conexión
$connect = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");


//generamos la consulta
$sql = "SELECT * FROM sales";
mysqli_set_charset($connect, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($connect, $sql)) die();

$orders = array(); //creamos un array

while($row = mysqli_fetch_array($result)) 
{
  $id=$row['id'];
	$nombre_cliente=$row['name_client'];
  $apellido_cliente=$row['lastname_client'];
  $fecha = date('y-m-d');
  $direccion
}


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://ssapi.shipstation.com/orders/createorder");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_POSTFIELDS, "{
  \"orderNumber\": \"TEST-ORDER-API-DOCS-2-pirulo test\",
  \"orderKey\": \"0f6bec18-3e89-4881-83aa-f392d84f4c74-2019-22\",
  \"orderDate\": \"'$fecha'\",
  \"paymentDate\": \"'$fecha'\",
  \"shipByDate\": \"2015-07-05T00:00:00.0000000\",
  \"orderStatus\": \"awaiting_shipment\",
  \"customerId\": \"'$id'\",
  \"customerUsername\": \"'$nombre_cliente'\",
  \"customerEmail\": \"headhoncho@whitehouse.gov\",
  \"billTo\": {
    \"name\": \"'$nombre_cliente'\",
    \"company\": \"'$apellido_cliente'\",
    \"street1\": null,
    \"street2\": null,
    \"street3\": null,
    \"city\": null,
    \"state\": null,
    \"postalCode\": null,
    \"country\": null,
    \"phone\": null,
    \"residential\": null
  },
  \"shipTo\": {
    \"name\": \"'$nombre_cliente'\",
    \"company\": \"US Govt\",
    \"street1\": \"'$direccion'\",
    \"street2\": \"Oval Office\",
    \"street3\": null,
    \"city\": \"'14125'\",
    \"state\": \"DC\",
    \"postalCode\": \"Washington\",
    \"country\": \"US\",
    \"phone\": \"1234567899\",
    \"residential\": true
  },
  \"items\": [
    {
      \"lineItemKey\": \"vd08-MSLbtx\",
      \"sku\": \"ABC123\",
      \"name\": \"Test item #1\",
      \"imageUrl\": null,
      \"weight\": {
        \"value\": 24,
        \"units\": \"ounces\"
      },
      \"quantity\": 2,
      \"unitPrice\": 99.99,
      \"taxAmount\": 2.5,
      \"shippingAmount\": 5,
      \"warehouseLocation\": \"Aisle 1, Bin 7\",
      \"options\": [
        {
          \"name\": \"Size\",
          \"value\": \"Large\"
        }
      ],
      \"productId\": 123456,
      \"fulfillmentSku\": null,
      \"adjustment\": false,
      \"upc\": \"32-65-98\"
    },
    {
      \"lineItemKey\": null,
      \"sku\": \"DISCOUNT CODE\",
      \"name\": \"10% OFF\",
      \"imageUrl\": null,
      \"weight\": {
        \"value\": 0,
        \"units\": \"ounces\"
      },
      \"quantity\": 1,
      \"unitPrice\": -20.55,
      \"taxAmount\": null,
      \"shippingAmount\": null,
      \"warehouseLocation\": null,
      \"options\": [],
      \"productId\": 123456,
      \"fulfillmentSku\": \"SKU-Discount\",
      \"adjustment\": true,
      \"upc\": null
    }
  ],
  \"amountPaid\": 218.73,
  \"taxAmount\": 5,
  \"shippingAmount\": 10,
  \"customerNotes\": \"Please ship as soon as possible!\",
  \"internalNotes\": \"Customer called and would like to upgrade shipping\",
  \"gift\": true,
  \"giftMessage\": \"Thank you!\",
  \"paymentMethod\": \"card\",
  \"requestedShippingService\": \"Priority Mail\",
  \"carrierCode\": \"fedex\",
  \"serviceCode\": \"fedex_2day\",
  \"packageCode\": \"package\",
  \"confirmation\": \"delivery\",
  \"shipDate\": \"2015-07-02\",
  \"weight\": {
    \"value\": 25,
    \"units\": \"ounces\"
  },
  \"dimensions\": {
    \"units\": \"inches\",
    \"length\": 7,
    \"width\": 5,
    \"height\": 6
  },
  \"insuranceOptions\": {
    \"provider\": \"carrier\",
    \"insureShipment\": true,
    \"insuredValue\": 200
  },
  \"internationalOptions\": {
    \"contents\": null,
    \"customsItems\": null
  },
  \"advancedOptions\": {
    \"warehouseId\": null,
    \"nonMachinable\": false,
    \"saturdayDelivery\": false,
    \"containsAlcohol\": false,
    \"mergedOrSplit\": false,
    \"mergedIds\": [],
    \"parentId\": null,
    \"storeId\": null,
    \"customField1\": \"Custom data that you can add to an order. See Custom Field #2 & #3 for more info!\",
    \"customField2\": \"Per UI settings, this information can appear on some carrier's shipping labels. See link below\",
    \"customField3\": \"https://help.shipstation.com/hc/en-us/articles/206639957\",
    \"source\": \"Webstore\",
    \"billToParty\": null,
    \"billToAccount\": null,
    \"billToPostalCode\": null,
    \"billToCountryCode\": null
  },
  \"tagIds\": [
    53974
  ]
}");

$entrada = 'OWYzOWNlYjg3MmE4NDA4ODkzODZhZDM4OTU2NjcxMDY6MTExZGE0ODVjNzVkNDMwY2FkZjJmMGE3ODY4OTkxNDg=';

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  //"Authorization: Basic OWYzOWNlYjg3MmE4NDA4ODkzODZhZDM4OTU2NjcxMDY6MTExZGE0ODVjNzVkNDMwY2FkZjJmMGE3ODY4OTkxNDg=",
  "Authorization: Basic $entrada",
  /*$connectionID = strtolower('9f39ceb872a840889386ad3895667106'),
  $apiKey = strtolower('111da485c75d430cadf2f0a786899148'),*/
));

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);