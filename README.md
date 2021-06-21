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

5. cek in file .env **DB_DATABASE** Fill in the filterpedia database name and don't forget to create the database > DB_DATABASE=filterpedia

4. run migration 
``` 
php artisan migrate 
```

7. if want fake data run this command in terminal
``` 
php artisan db:seed 
```
