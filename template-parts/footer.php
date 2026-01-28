
<!-- FOOTER -->

<footer>
  &copy;<?=date("Y");?> Real Estate Disposition Opportunities | Keller Williams®
</footer>





<script>
  // smooth scroll
  $('.scroll-form').click(function(){
    $('html,body').animate({scrollTop:$('#form').offset().top - 100},600);
  });

  // slider
  let index=0;
  const track=document.querySelector('.review-track');
  const cards=document.querySelectorAll('.review-card').length;
  document.querySelector('.next').onclick=()=>{index=Math.min(index+1,cards-3);track.style.transform=`translateX(-${index*33.33}%)`;}
  document.querySelector('.prev').onclick=()=>{index=Math.max(index-1,0);track.style.transform=`translateX(-${index*33.33}%)`;}
</script>



<script>
  const promoBar = document.getElementById('promoBar');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      promoBar.style.transform = 'translateY(-100%)';
      promoBar.style.opacity = '0';
    } else {
      promoBar.style.transform = 'translateY(0)';
      promoBar.style.opacity = '1';
    }
  });
</script>

</body>
</html>
