package com.mysql.DBconnect;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DbConnection {
	
	private final String  driverClass = "com.mysql.jdbc.Driver";
	
	private final String  driverUrl = "jdbc:mysql://";
	
	private final String  host = "localhost:3306/";
	
	private final String  databaseName = "brayana";
	
	private final String  username = "root";
	
	private final String  password = "root";
	
	
	public Connection getConnetion(){
		
		Connection con = null;
		try {
			Class.forName(driverClass);
			con=DriverManager.getConnection(driverUrl + host  +  databaseName , username , password  );
			return con;
//					"jdbc:mysql://localhost:3306/sonoo","root","root");  
		} catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			
			e.printStackTrace();
			return null;
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
			return null;
		}  
		
	}
	
	public static void main(String[] args) {
		DbConnection dbConnection = new DbConnection();
		Connection con = dbConnection.getConnetion();
		
		System.out.println("dbConnection.main()"+con);
	}
	
	

}
