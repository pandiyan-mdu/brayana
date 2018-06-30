package com.brayana.dao;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

import com.brayana.pojo.UserLoginVo;
import com.mysql.DBconnect.DbConnection;

public class UserLoginDAO {
	
	Connection conn = null;
	
	Statement stmt = null;
	
	public boolean validateLogin(UserLoginVo userLoginVo){
		//Db connect instance
		DbConnection dbConnect = new DbConnection();
		//default variable
		boolean result = false;
		//get Connection
		conn = dbConnect.getConnetion(); 
		//validate connection is null 
		if(conn!=null){
			
		try {
			//create statement from connection instance
			stmt = conn.createStatement();
			//get result set and validate user name and password
			
			//query
			String validateLogin = "SELECT * FROM user_login where user_name = '"+userLoginVo.getUserName()+"' and user_password='"+userLoginVo.getUserPassword()+"' ";
			result = validateUserLogin(stmt.executeQuery(validateLogin) , userLoginVo);
			
		} catch (SQLException e) {
			// throw exception 
			e.printStackTrace();
		}
		
		}
		//return true when username and password is equal else return false
		return result;
		
	}
	
	
	//validate User Login
		public boolean validateUserLogin(ResultSet rs , UserLoginVo userLoginVo){
			//default variable
			boolean result = false;
			 try {
			  //get result and check
			  while(rs.next()){
			         //Retrieve by column name
			         String userName = rs.getString("user_name");
			         String password = rs.getString("user_password");
			         
			         int id = rs.getInt("id");
			         //validate username and password and return true
			         if(userName.equals(userLoginVo.getUserName()) && password.equals(userLoginVo.getUserPassword())){
		        	 //set true when username and password is equals
			        	 result = true;
			         }
			      }
			  	// close connection 
			    rs.close();
			 } catch (SQLException e) {
					// TODO Auto-generated catch block
					e.printStackTrace();
				}
			//return true when username and password is equal else return false
			 return result;
		}
		
		
		public static void main(String[] args) {
			UserLoginVo userLoginVo = new UserLoginVo();
			userLoginVo.setUserName("admin");
			userLoginVo.setUserPassword("admin");
			
			UserLoginDAO userLoginDAO = new UserLoginDAO();
			
			System.out.println("UserLoginDAO.main()"+userLoginDAO.validateLogin(userLoginVo)); 
		}
	

}
