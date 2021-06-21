## information
1. reuired PHP Version 7.4.20
2. node packge manager (npm) v 6.4
3. laravel version 8 
4. include jetstream and livewire
## Installation
1. Download repositor
```
git clone https://github.com/gusti126/backend-filterpedia.git
```

2. Install composer
```
composer install
```

3. install node packge manager
``` 
npm install
```

``` 
npm run dev 
```

4. copy file .env.example and rename to .env

5. cek in file .env **DB_DATABASE** Fill in the filterpedia database name and don't forget to create the database 
> DB_DATABASE=filterpedia

4. run migration 
``` 
php artisan migrate 
```

7. if want fake data run this command in terminal
``` 
php artisan db:seed 
```
## structur folder controller
### API
> selalu ada tanda/tulisan api di setiap controller api untuk membedakan dengan controller lainnya
1. UserApiController
    - index : for get all data users
        - name
        - email
    - detail : untuk detail setiap user
        - image
        - name
        - email
        - phone number
        - alamat
    - update profile : untuk update profile user
        - update image
        - update name
        - update email
        - update phone number
        - update alamat
    - destroy : for delete one user data
2. AuthApiController
    - login : untuk proses login 
        - image
        - name
        - email
        - phone number
        - alamat
        - token
    - register : from input data user for register and response back token
        - token

3. ProductApiController 
    - index : for get all data product
        - name
        - thumbnail
        - price
    - detail : untuk detail setiap porduk
        - name
        - thumbnail
        - gallery product
        - price product
        - count sell product
        - review product count and note
        - deskripsi product
    - product populler
        - name
        - thumbnail
        - price
    - new product
        - name
        - thumbnail
        - price
    - search product
        - name
        - thumbnail
        - price
    