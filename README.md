# Inception

Настроенная инфраструктура с помощью Docker compose. После запуска разворачивается вебсайт использующий для работы nginx, wordpress и mariadb. Каждый из этих инструментов устанавливается и настраивается с помощью отдельного Docker образа, составленного самостоятельно. База данных и файлы сайта выводятся из внутренней сети докера с помощью volume. 
## Компиляция и запуск
Компиляция выполняется с помощью Makefile. Список команд:
``` 
make		- компиляция прокта
make clean	- удаление файлов созданных в процессе компиляции, но не нужных для запуска
make fclean	- удаление файлов созданных в процессе компиляции
```

## Диаграмма взаимодействия контейнеров
![image](https://user-images.githubusercontent.com/36601351/171901866-3aa5262b-5f50-4538-8dc7-07614982d9ba.png)
