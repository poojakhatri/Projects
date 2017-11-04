<?php

	class Connection{

		private $connection;

		public function __construct( $host = '127.0.0.1', $userName = 'root', $password = 'password', $db = 'tour'){
			$this->setConnection(mysqli_connect($host, $userName, $password, $db));
		}

		public function getConnection(){
			$this->connection;
		}

		public function setConnection($connection){
			$this->connection = $connection;
		}

		public function getBlog($blogId = false){
			$returnRows  = [];
			$whereCondition = '';
			if($blogId){
				$whereCondition = ' where id = '.$blogId;
			}
			$blogSearch = 'select * from tour.blog '. $whereCondition;

			$result  = mysqli_query($this->connection, $blogSearch);
			while ($row  = mysqli_fetch_array($result,MYSQLI_ASSOC)) $returnRows[] = $row;
			return $returnRows;
		}

		public function addBlog( $title, $desc, $content ){
			$sql = ' insert into tour.blog ( title, description, content ) values ( "'.$title.'","'.$desc.'","'.$content.'" ) ';
			mysqli_query($this->connection, $sql);
			return mysqli_insert_id( $this->connection );
		}

		public function getNearBy($blogId = false){
			$returnRows  = [];
			$whereCondition = '';
			if($blogId){
				$whereCondition = ' where id = '.$blogId;
			}
			$blogSearch = 'select * from tour.nearBy '. $whereCondition;

			$result  = mysqli_query($this->connection, $blogSearch);
			while ($row  = mysqli_fetch_array($result,MYSQLI_ASSOC)) $returnRows[] = $row;
			return $returnRows;
		}
	}
