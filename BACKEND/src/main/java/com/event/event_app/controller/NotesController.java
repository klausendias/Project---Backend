package com.event.event_app.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;
import com.event.event_app.model.EventTable;
import com.event.event_app.repository.NotesRepository;

@RestController
@CrossOrigin(origins ="*", allowedHeaders= "*")
@RequestMapping("/events")
public class NotesController {
	
	@Autowired
	private NotesRepository notesRepository;

	@RequestMapping(value ="all", method = RequestMethod.GET)
	public List<EventTable> list(){
		return notesRepository.findAll();
	}
}