package com.brayana.servlet;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import com.brayana.dao.UserLoginDAO;
import com.brayana.pojo.UserLoginVo;
import com.brayana.util.RandomKeyGenerator;

import net.sf.json.JSONObject;

public class AdminServletHelper {
	
	public UserLoginVo getUserLoginVo(HttpServletRequest request) {
		UserLoginVo userLoginVo = new UserLoginVo();
		userLoginVo.setUserName(request.getParameter("username"));
		userLoginVo.setUserPassword(request.getParameter("password"));
		
		return userLoginVo;
	}
	
	
	public JSONObject doAdminServlet(HttpServletRequest request) {
		JSONObject json = new JSONObject();
		UserLoginVo userLoginVo = new UserLoginVo();
		RandomKeyGenerator randomKeyGenerator = new RandomKeyGenerator();
		HttpSession session = request.getSession();  
		
		System.out.println("AdminServletHelper.doAdminServlet()" +session.getAttribute(String.valueOf(1)));
		
		UserLoginDAO userLoginDAO = new UserLoginDAO();
		
		if (request.getParameter("username")!=null || request.getParameter("password")!=null) {
			userLoginVo = userLoginDAO.validateLogin(getUserLoginVo(request));
			if(userLoginVo.isStatus()) {
				String randomKey = randomKeyGenerator.generateRandomString();
				userLoginVo.setKey(randomKey);
		        session.setAttribute(String.valueOf(userLoginVo.getId()),randomKey);
			}else {
				session.invalidate();
			}
		}
		
		return json.accumulate("responseValue", userLoginVo);
	}
	
	
	
}
