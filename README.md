#  Backend Project - Doctor8SC  

##  Practice - 09/11/2025  

###  Prerequisites  
- **MySQL** installed (via **XAMPP** or any other method).  
- **Windows** operating system (recommended).  
- **Visual Studio Code** installed.  
- **Composer** and **PHP** properly configured.  

---

###  Installation Steps  

#### 1️ Start Services in XAMPP  
1. Open **XAMPP**.  
2. Start **Apache** and **MySQL** services.  
3. Go to: [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)  

#### 2️ Create the Database  
Create a new database with the following name:  

```sql
appointment_db8sc
```
## Laravel Proyect Configuration   
- Open the doctor8SC project in Visual Studio Code.
- Inside the .env file, update these values:
```env
BD_CONNECTION=mysql
BD_DATABASE=appointment_db8sc
```
# Run Migrations
In your project terminal, execute:
```
php artisan migrate
```
This will create all necessary tables in your datebases.
You can verify them in phpMyAdmin.
## Start the Larevel Sever 
Run the local server with:
```
php artisan serve
```
The open the link displayed in your terminal: Server running on [http://127.0.0.1:8000].
# Set the Timezone 
1. Open the following file:
```
 config/app.php
```
2. Locate the timezone line and update it according to your region, for example:
```
'timezone' => 'America/Merida',
```


