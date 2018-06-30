package com.mysql.DBconnect;

import java.sql.*;

public class test {
	
	
/*	
	
	
	
	public static void main(String args[]){  
	try{  
	Class.forName("com.mysql.jdbc.Driver");  
	Connection con=DriverManager.getConnection(  
	"jdbc:mysql://localhost:3306/sonoo","root","root");  
	//here sonoo is database name, root is username and password  
	Statement stmt=con.createStatement();  
	ResultSet rs=stmt.executeQuery("select * from emp");  
	while(rs.next())  
	System.out.println(rs.getInt(1)+"  "+rs.getString(2)+"  "+rs.getString(3));  
	con.close();  
	}catch(Exception e){ System.out.println(e);}  
	}  
	
	
	// create our mysql database connection
    String myDriver = "org.gjt.mm.mysql.Driver";
    String myUrl = "jdbc:mysql://localhost/test";
    Class.forName(myDriver);
    Connection conn = DriverManager.getConnection(myUrl, "root", "");
    
    // our SQL SELECT query. 
    // if you only need a few columns, specify them by name instead of using "*"
    String query = "SELECT * FROM users";

    // create the java statement
    Statement st = conn.createStatement();
    
    // execute the query, and get a java resultset
    ResultSet rs = st.executeQuery(query);
    
    // iterate through the java resultset
    while (rs.next())
    {
      int id = rs.getInt("id");
      String firstName = rs.getString("first_name");
      String lastName = rs.getString("last_name");
      Date dateCreated = rs.getDate("date_created");
      boolean isAdmin = rs.getBoolean("is_admin");
      int numPoints = rs.getInt("num_points");
      
      // print the results
      System.out.format("%s, %s, %s, %s, %s, %s\n", id, firstName, lastName, dateCreated, isAdmin, numPoints);
    }
    st.close();
  }
  catch (Exception e)
  {
    System.err.println("Got an exception! ");
    System.err.println(e.getMessage());
  }*/

}
