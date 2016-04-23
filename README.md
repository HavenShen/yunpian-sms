# yunpian-sms

[![Latest Stable Version](https://img.shields.io/packagist/v/HavenShen/yunpian-sms.svg?style=flat-square)](https://packagist.org/packages/HavenShen/yunpian-sms)
[![Total Downloads](https://img.shields.io/packagist/dt/HavenShen/yunpian-sms.svg?style=flat-square)](https://packagist.org/packages/HavenShen/yunpian-sms)
[![License](https://img.shields.io/packagist/l/HavenShen/yunpian-sms.svg?style=flat-square)](https://packagist.org/packages/HavenShen/yunpian-sms)

> 本版本可以用于使用[云片网络短信服务商](http://www.yunpian.com/),基于laravel5.1.*以上版本的系统集成短信发送功能。

## 安装

1. 安装包文件

  ```shell
  composer require havenshen/yunpian-sms
  ```

## 配置

### Laravel 应用

1. 注册 `ServiceProvider`:

  ```php
  HavenShen\YunpianSMS\YunpianSMSServiceProvider::class,
  ```

2. 创建配置文件：

  ```shell
  php artisan vendor:publish
  ```

3. 请修改应用根目录下的 `config/yunpian.php` 中对应的项即可；

4. （可选）添加外观到 `config/app.php` 中的 `aliases` 部分:

  ```php
  'YunpianSMS' => HavenShen\YunpianSMS\Facades\YunpianSMS::class,
  ```
  
5. 在 ENV 中配置以下选项：

  ```php
  SMS_API_KEY=xxx
  SMS_SEND_URL=xxx
  SMS_SEND_TEXT=xxx
  ```
  
6.使用

  ```php
  /*
  *可以是个string字符串或array字符串群发
  */
  \YunpianSMS::sendSMS('139xxxx5926');
  ```
  
## License

MIT
