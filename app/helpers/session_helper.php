<?php
	session_start();

	// Flash message helper
	// EXAMPLE - flash('register_success', 'You are now registered', 'alert alert-danger');
	// DISPLAY IN VIEW - <?php echo flash('register_success'); 
	function flash($name = '', $message ='', $class = 'alert alert-success'){
		if(!empty($name)){
			if(!empty($message) && empty($_SESSION[$name])){
				//this part is used to set the session info to use later for flash message display
					if(!empty($_SESSION[$name])){
						unset($_SESSION['name']);
					}

					if(!empty($_SESSION[$name . '_class'])) {
						unset($_SESSION[$name . '_class']);
					}
					$_SESSION[$name] = $message;
					$_SESSION[$name . '_class'] = $class;
			} elseif(empty($message) && !empty($_SESSION[$name])) {
				//this part displays the flash message as a div where flash() is echoed
				$class = !empty($_SESSION[$name. '_class']) ? $_SESSION[$name . '_class'] : '';
				echo '<div class="' . $class . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
				//$_SESSION[$name] that is echoed here is changed to the $message in the first if condition
				unset($_SESSION[$name]);
				unset($_SESSION[$name . '_class']);
			}
		}
	}
	
	function isLoggedIn() {
		if(isset($_SESSION['user_id'])){
			return true;
		} else {
			return false; 
		}
	}

?>