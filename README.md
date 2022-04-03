# FemaledailyAddress
FemaledailyAddress Label attribute, Address log API, Addresslist API


## Installation

Copy the content of the repo to the app/code/Femaledaily/Address/ folder

Enable module:
```
php bin/magento module:enable Femaledaily_Address
```

Disable module: (Optional)
```
php bin/magento module:disable Femaledaily_Address --clear-static-content
```

Update system:
```
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento cache:flush
php bin/magento cache:clean
```


### **Address label access :**

FRONTEND : Customer login -> Customer dashboard -> Address book -> Add / Edit Address Form

BACKEND : Admin -> All Customer -> Choose one customer -> Edit Address

_TODO : Add label on checkout process_


### **Address list API :**
```
Endpoint : <host>/rest/V1/customers/me/address/?customer_id={customer_id}
  
            params : customer_id
 ```
_TODO : Add more data to be set at the result. (Currently Street only)_

  
### **Customer API Accesss log **

log file can be seen on /var/log/rest_api.log

BACKEND : Admin -> Customers -> Femaledaily Address Log

_TODO : Print rest_api.log data on Femaledaily Address Log page. Add delete/clear action  _
