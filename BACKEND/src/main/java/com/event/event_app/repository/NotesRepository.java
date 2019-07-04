package com.event.event_app.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.event.event_app.model.EventTable;

public interface NotesRepository 
		extends JpaRepository<EventTable, Long> {

}