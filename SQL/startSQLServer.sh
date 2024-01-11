sudo docker run --name sql_2019 -e "ACCEPT_EULA=Y" -e "SA_PASSWORD=P@ssword" -e "MSSQL_PID=Enterprise" -p 1436:1433 -d mcr.microsoft.com/mssql/server:2019-latest
