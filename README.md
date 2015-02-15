Yii2 Dynamic Tabular Form App
================================

This is a Demonstration on how to implement dynamic tabular forms.
This application is built on top of [Yii2 Basic application template](https://github.com/yiisoft/yii2-app-basic).
Please refer to the basic app for more installation details and requirements such as composer
The dynamic addition of rows in this app does not actually implement javascript and instead uses a `addRow` button to refresh the page with a new row


Receipt Controller
------------

After installation:
- run the migration using
```
php yii migrate
```
- Access the receipt CRUD in
```
http://localhost/yii2-dynamic-tabular-form-app/web/?r=receipt
```

![Form](http://snag.gy/dMPxm.jpg)

Running Tests
-----------
Requirements
- Firefox
- Selenium

Configuration
modify the `tests/codeception/acceptance.suite.yml`
```
    config:
        WebDriver:
            url: 'http://127.0.0.1/yii2-dynamic-tabular-form-app/web/'
            browser: firefox
            restart: true
            clear_cookies: true
```
with your necessary settings
