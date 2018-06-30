package com.brayana.servlet;

import javax.servlet.http.HttpServletRequest;

import com.brayana.pojo.UserLoginVo;

public class AdminServletHelper {
	
	public UserLoginVo getUserLoginVo(HttpServletRequest request) {
		UserLoginVo userLoginVo = new UserLoginVo();
		userLoginVo.setUserName(request.getParameter("username"));
		userLoginVo.setUserPassword(request.getParameter("password"));
		
		return userLoginVo;
	}
}
