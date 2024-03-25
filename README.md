After creating the database and migration, you can run these command to populate the database:
```bash
    php artisan db:seed --class=ShiftSeeder 
    php artisan db:seed --class=PositionSeeder 
    php artisan db:seed --class=EmployeeSeeder