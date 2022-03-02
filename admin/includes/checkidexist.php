<?php

/*
This file is part of SecureSystem.
Copyright (C) 2022 Santiago Fernández, Airgold3 
    SecureSystem is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    SecureSystem is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with SecureSystem.  If not, see <https://www.gnu.org/licenses/>.
*/

include_once("../../includes/connection.php");
$id = $_GET['id'];
$sql = "SELECT COUNT(*) AS num FROM `users` WHERE id = :id";
$stmt = $con->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>