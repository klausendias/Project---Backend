package com.event.event_app.model;

import javax.persistence.Entity;
import javax.persistence.Id;

@Entity
public class EventTable {
	
	@Id
	String name;
	String email;
	String eventtype;
	String datetime;
	String details;
	
	public String getname() {
		return name;
	}
	public void setname(String name) {
		this.name = name;
	}
	
	public String getemail() {
		return email;
	}
	public void setemail (String email) {
		this.email = email;
	}
	
	public String geteventtype() {
		return eventtype;
	}
	public void seteventype(String eventtype) {
		this.eventtype = eventtype;
	}
	
	public String getdatetime() {
		return datetime;
	}
	public void setdatetime(String datetime) {
		this.datetime = datetime;
	}
	
	
	public String getdetails() {
		return details;
	}
	public void setdetails(String details) {
		this.details = details;
	}
	

}
