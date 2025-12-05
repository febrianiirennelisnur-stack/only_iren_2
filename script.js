// Simple JS untuk efek tombol dan fake submit
function fakeSubmit(){
  alert('Terima kasih! Pesan Anda berhasil dikirim (demo).');
  return false; // mencegah reload (demo)
}

// Smooth reveal on scroll (simple)
document.addEventListener('DOMContentLoaded', ()=>{
  const obs = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting) e.target.classList.add('reveal');
    });
  },{threshold:0.12});
  document.querySelectorAll('.card, .project-card, .features .card').forEach(el=>obs.observe(el));
});
