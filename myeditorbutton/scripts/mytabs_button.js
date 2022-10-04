(function(){
	tinymce.PluginManager.add('mytabs_mce_button',
		function(editor,url){
			editor.addButton(
				'mytabs_mce_button',
				{
					text: 'Вкладки',
					title: 'Это тайтл',
					onclick: function() {
						editor.insertContent("Это сделала кнопка");
					}
				}
			);
		}
	);
})();