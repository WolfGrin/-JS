<?php
//###############################################################################################
//#
//#	 скрипт можно повешать на любое действие,
//#	 в данном случае это <a class='vk' onclick="..."><i class="fa fa-vk"></i></a>
//#	 далее формируется ссылка из 4 позиций: ссылка на материал, заголовок, картинка и описание
//#
//###############################################################################################
?>

<div class="container">
	<div class="row">

<li><a class='vk' onclick="Share.vkontakte(

			'http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>',	//ссылка
			'Azamara Group Ltd - <?php echo $this->escape($this->item->title)?>',	//заголовок
			'http://<?php echo $_SERVER['HTTP_HOST']."/".preg_replace("/('|\"|\r?\n)/", '', json_decode($this->item->images)->image_intro);?>',	//картинка
			'<?php echo preg_replace("/('|\"|\r?\n)/", '', $this->item->introtext); //описание
				?>')">

			<i class="fa fa-vk"></i></a></li>
		</ul>

	<div class="row">
</div>


<script>

  Share = {
    vkontakte: function(purl, ptitle, pimg, text) {
      url  = 'http://vkontakte.ru/share.php?';
      url += 'url='          + encodeURIComponent(purl);
      url += '&title='       + encodeURIComponent(ptitle);
      url += '&description=' + encodeURIComponent(text);
      url += '&image='       + encodeURIComponent(pimg);
      url += '&noparse=true';
      Share.popup(url);
    },

    popup: function(url) {
      window.open(url,'','toolbar=0,status=0,width=626,height=436');
    }
  };
  </script>