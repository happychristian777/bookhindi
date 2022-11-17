<style>
.add_space {
    margin-left:18px;
}section.pricing {
  background: #000080;
  background: linear-gradient(to right, #6f42c1, #e83e8c);
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->
<h2><center>Exam repeated important words and phrases </center></h2><br>
<section class="pricing py-5 ">
  <div class="container ">
    <div class="row ">
       
  <iframe oncontextmenu="return false;"   src="<?php echo base_url();?>/assets/Tamil/vocab_tamil.pdf#toolbar=0&scrollbar=1&navpanes=0&embedded=false&statusbar=0&view=Fit;readonly=true;disableprint=true;oncontextmenu=false;" 
                            style="width:100%; height:900px;" frameborder="0" ></iframe>
    <!-- <embed class="tlClogo" src="<?php echo base_url();?>/assets/assets_home/images/hindi_naati_vocab.pdf#toolbar=0" width="100%" height="1000"> -->
    </div>
  </div>
</section>
<script>
  $(function() {
        $(this).bind("contextmenu", function(e) {
            e.preventDefault();
        });
    }); 
</script>