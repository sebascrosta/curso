<?php

interface SectionRepository
{
	public function listAll();
	public function getById($id);
}