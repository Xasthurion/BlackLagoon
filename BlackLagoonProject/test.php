<?php

class CodeCallGtk extends GtkWindow {



	/**

	* FirstGTK constructor. Actually creates the

	* window

	*

	* @return FirstGtk

	*/

	public function __construct() {

		/*

		* Call the parent constructor

		*/

		parent::__construct();



		/*

		* Set the size of the new GTK Window

		* Set the Title

		* Connect the destroy/exit event to a function

		*/

		$this->set_default_size(400,100);

		$this->set_title('CodeCall.net PHP-GTK GUI Tutorial');

		$this->connect_simple('destroy', array('gtk', 'main_quit'));


		/*

		* This will realize and show

		* all windows from child to parent.

		*/

		$this->show_all();

	}

}



new CodeCallGtk();

Gtk::main();






?>