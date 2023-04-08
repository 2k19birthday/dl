<!DOCTYPE html>
<html>
<head>
	<title>FAQ</title>
  <style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body>

<div class="container">
  <h1>Driving Institute FAQ</h1>
  <div class="faq-list">
    <div class="faq-item">
      <div class="faq-content">
        <h2>What are the requirements for taking driving lessons?</h2>
        <p>To take driving lessons, you must have a valid learner's permit or driver's license, be at least 16 years of age, and provide proof of insurance for any vehicle you plan to use during your lessons.</p>
      </div>
    </div>
    <div class="faq-item">
      <div class="faq-content">
        <h2>How long does it take to complete the driving course?</h2>
        <p>The length of the driving course varies depending on the individual's driving ability and the type of course selected. On average, it takes 6-8 weeks to complete the course.</p>
      </div>
    </div>
	</div>
</div>
<script type="text/javascript">
	const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
  const question = item.querySelector('.faq-content h2');
  const answer = item.querySelector('.faq-content p');
  
  question.addEventListener('click', () => {
    answer.classList.toggle('hidden');
  });
});

</script>
</body>
</html>