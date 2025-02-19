export default function EventGallery() {
    return (
      <section className="relative w-full h-[300px] md:h-[400px] lg:h-[500px] flex items-center justify-center">
        <div className="absolute inset-0">
          <img  src="http://localhost:1337/uploads/Mask_group_8939a3779e.png" alt="Event Gallery" className="w-full h-full object-cover"/>
          <div className="absolute inset-0"></div>
        </div>  
        <div className="relative text-center px-4 md:px-8">
          <h2 className="text-white text-3xl md:text-4xl lg:text-5xl font-bold">Our events gallery</h2>
          <p className="text-white text-sm md:text-lg mt-2 max-w-2xl">Events at DBTR are filled with joyous occasions, cultural gatherings, and learning opportunities that bring us all together.</p>
        </div>
      </section>
    );
  }
  