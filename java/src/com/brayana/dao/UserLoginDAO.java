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
	
	public UserLoginVo validateLogin(UserLoginVo userLoginVo){
		//Db connect instance
		DbConnection dbConnect = new DbConnection();
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
			userLoginVo = getUserDetails(stmt.executeQuery(validateLogin) , userLoginVo);
			
		} catch (SQLException e) {
			// throw exception 
			e.printStackTrace();
		}
		
		}
		//return true when username and password is equal else return false
		return userLoginVo;
		
	}
	
	
	public UserLoginVo getUserDetails(ResultSet rs , UserLoginVo userLoginVo){
		//default variable
		 try {
		  //get result and check
		  while(rs.next()){
		         //Retrieve by column name
		         String userName = rs.getString("user_name");
		         String password = rs.getString("user_password");
		         
		         //validate username and password and return true
		         if(userName.equals(userLoginVo.getUserName()) && password.equals(userLoginVo.getUserPassword())){
	        	 //set true when username and password is equals
		        	 userLoginVo.setId(rs.getInt("id"));
		        	 userLoginVo.setUserName(rs.getString("user_name"));
		        	 userLoginVo.setUserEmail(rs.getString("user_email"));
		        	 userLoginVo.setUserMobile(rs.getString("user_mobile"));
		        	 userLoginVo.setUserType(rs.getInt("user_type"));
		        	 userLoginVo.setStatus(true);
		        	 
		        	 return userLoginVo;
		         }
		      }
		  	// close connection 
		    rs.close();
		 } catch (SQLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		//return true when username and password is equal else return false
		 return userLoginVo;
	}
	
	
	//validate User Login
	public int validateUserLogin(ResultSet rs , UserLoginVo userLoginVo){
		//default variable
		int result = 0;
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
		        	 return id;
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
