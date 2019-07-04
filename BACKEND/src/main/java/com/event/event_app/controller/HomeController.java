package com.event.event_app.controller;

import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@RestController
@CrossOrigin(origins ="*", allowedHeaders= "*")
@RequestMapping (path="/user")
public class HomeController {
	
	@GetMapping
public String Check() {
		return "Hello Everyone";
	}
}
