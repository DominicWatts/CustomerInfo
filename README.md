# Magento 2 Additional Customer Info #

Magento 2 additional info on customer grid - last logged in and last order date 

# Install instructions #

`composer require dominicwatts/customerinfo`

`php bin/magento setup:upgrade`

`php bin/magento setup:di:compile`

# Usage instructions #

Additional columns appear in admin grid

![Screenshot](https://i.snipboard.io/pl2r5L.jpg)

Notes: 

  - Last order value will only come through if customer has logged in or record for login has not been wiped
  - If new colums appear after action column in admin customer grid run the following cleanup query
    -  `DELETE FROM ui_bookmark WHERE namespace = 'customer_listing'`
    -  This will remove any currently saved personalisation on the admin customer grid. But will allow Magento to reset sort.