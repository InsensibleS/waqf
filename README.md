## WAQF

local installation
- git clone https://git.softlex.pro/softlex/waqf/waqf-backend.git
- copy file .env.example in file .env
- set database connection settings in .env (APP_URL, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
- set smtp settings in .env
  MAIL_MAILER=smtp  
  MAIL_HOST=smtp.mail.ru  
  MAIL_PORT=465  
  MAIL_USERNAME=waqf.test@bk.ru  
  MAIL_PASSWORD=(password is in confluence)
  MAIL_ENCRYPTION=ssl    
  MAIL_FROM_ADDRESS=waqf.test@bk.ru  
  MAIL_FROM_NAME="${APP_NAME}"
- docker-compose build app
- docker-compose up -d
- docker exec -ti app bash
- composer install
- php artisan key:generate
- php artisan migrate --seed
