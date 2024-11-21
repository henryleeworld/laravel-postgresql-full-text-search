# Laravel 11 PostgreSQL 全文檢索

引入 gctc-ntgc 的 laravel-scout-postgres-tsvector 套件來擴增 PostgreSQL 全文檢索，全文檢索搜尋可讓使用者針對資料表中以字元為主的資料，執行全文檢索查詢。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/posts-lists/` 來進行貼文查詢。

----

## 畫面截圖
![](https://i.imgur.com/ZCgM97o.png)
> 顯示全部貼文

![](https://i.imgur.com/VmzndJA.png)
> 對貼文標題、內容進行查詢
