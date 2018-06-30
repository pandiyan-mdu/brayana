package com.brayana.servlet;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import com.brayana.dao.UserLoginDAO;

import net.sf.json.JSONObject;

/**
 * Servlet implementation class AdminServlet
 */
@WebServlet("/AdminServlet")
public class AdminServlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public AdminServlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		//response.getWriter().append("Served at: ").append(request.getContextPath());
		
		JSONObject json = new JSONObject();
		
		PrintWriter out = response.getWriter();
		
		AdminServletHelper adminServletHelper = new AdminServletHelper();
		
		boolean status = false;
		
		if (request.getParameter("username")!=null || request.getParameter("password")!=null) {
			UserLoginDAO userLoginDAO = new UserLoginDAO();
			status = userLoginDAO.validateLogin(adminServletHelper.getUserLoginVo(request));
			
			HttpSession session = request.getSession();  
	        session.setAttribute("name",request.getParameter("username"));  
		}
		
		json.accumulate("responseValue", status);
		out.println(json.toString());
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		doGet(request, response);
	}

}
