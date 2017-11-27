  $(document).ready(function() {
   
    // affichage du message préparé par le contrôleur avec une fenêtre de dialogue
	// activée en JQuery dès que la page est prête
	<?php if($typeMessage == "avertissement") {?>
	afficher_avertissement("<?php echo $message; ?>");
	<?php } ?>
		
	<?php if($typeMessage == "information") {?>
	afficher_information("<?php echo $message; ?>");
	<?php } ?>

    // affichage d'une information avec une fenêtre modale
	function afficher_information(msg)
	{
		$('#texte_message_information').empty();
		$('#texte_message_information').append(msg);
		// affiche la boîte de dialogue 'affichage_message_information'
		$('#modalInformation').modal('show');
	}

	// affichage d'un avertissement avec une fenêtre modale
	function afficher_avertissement(msg)
	{
		$('#texte_message_avertissement').empty();
		$('#texte_message_avertissement').append(msg);
		// affiche la boîte de dialogue 'affichage_message_avertissement' 
		$('#modalAvertissement').modal('show');
	}

  });