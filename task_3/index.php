<?php

$dsn = 'pgsql:host=pgsql;port=5432;dbname=db';

$pdo = new PDO($dsn, username: 'postgres', password: 'secret');