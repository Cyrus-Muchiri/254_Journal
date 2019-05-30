<?php
function get_news_title($mysql_connection, $news_id)
{	
	$sql = "SELECT title FROM news_intro WHERE news_id = {$news_id}";
	
	$result = mysqli_query($mysql_connection, $sql);
		
	if(($no_of_rows = mysqli_num_rows($result)) != 0)//check num of rows returned is greater than zero
	{
		while($row = mysqli_fetch_assoc($result))//fetch the data form the database
		{
			echo " 	{$row['title']}";
		}
	}
}

function get_news_introduction($mysql_connection, $news_id)
{	
	$sql = "SELECT introduction FROM news_intro WHERE news_id = {$news_id}";
	
	$result = mysqli_query($mysql_connection, $sql);
		
	if(($no_of_rows = mysqli_num_rows($result)) != 0)//check num of rows returned is greater than zero
	{
		while($row = mysqli_fetch_assoc($result))//fetch the data form the database
		{	
			echo "{$row['introduction']}";
		}
	}
}

function get_news_link($mysql_connection, $news_id)
{	
	$sql = "SELECT link FROM news_intro WHERE news_id = {$news_id}";
	
	$result = mysqli_query($mysql_connection, $sql);
		
	if(($no_of_rows = mysqli_num_rows($result)) != 0)//check num of rows returned is greater than zero
	{
		while($row = mysqli_fetch_assoc($result))//fetch the data form the database
		{	
			echo "{$row['link']}";
		}
	}
}

function get_share_title($mysql_connection, $share_id)
{	
	$sql = "SELECT title FROM shares WHERE shared_id = {$share_id}";
	
	$result = mysqli_query($mysql_connection, $sql);
		
	if(($no_of_rows = mysqli_num_rows($result)) != 0)//check num of rows returned is greater than zero
	{
		while($row = mysqli_fetch_assoc($result))//fetch the data form the database
		{
			echo " {$row['title']}";
		}
	}
}

function get_share_price($mysql_connection, $share_id)
{	
	$sql = "SELECT share_price FROM shares WHERE shared_id = {$share_id}";
	
	$result = mysqli_query($mysql_connection, $sql);
		
	if(($no_of_rows = mysqli_num_rows($result)) != 0)//check num of rows returned is greater than zero
	{
		while($row = mysqli_fetch_assoc($result))//fetch the data form the database
		{	
			echo "{$row['share_price']}";
		}
	}
}

function get_share_percentage_change($mysql_connection, $share_id)
{	
	$sql = "SELECT percentage_change FROM shares WHERE shared_id = {$share_id}";
	
	$result = mysqli_query($mysql_connection, $sql);
		
	if(($no_of_rows = mysqli_num_rows($result)) != 0)//check num of rows returned is greater than zero
	{
		while($row = mysqli_fetch_assoc($result))//fetch the data form the database
		{	
			echo "{$row['percentage_change']}";
		}
	}
}

?>