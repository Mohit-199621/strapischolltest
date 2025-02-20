"use client";
import { useState, useEffect } from "react";
const EventsCard = () => {
  const [events, setEvents] = useState([]);
  const [filteredEvents, setFilteredEvents] = useState([]);
  const [visibleCount, setVisibleCount] = useState(6);
  const [selectedCategory, setSelectedCategory] = useState("all");
  const [popupEvent, setPopupEvent] = useState(null);
  useEffect(() => {
    const fetchEvents = async () => {
      try {
        const res = await fetch("http://localhost:1337/api/events?populate=*");
        const data = await res.json();
        setEvents(data.data);
        setFilteredEvents(data.data);
      } catch (error) {
        console.error("Error fetching events:", error);
      }
    };
    fetchEvents();
  }, []);
  const handleFilter = (category) => {
    setSelectedCategory(category);
    if (category === "all") {
      setFilteredEvents(events);
    } else {
      const filtered = events.filter(
        (event) => event?.description?.trim()?.toLowerCase() === category.toLowerCase()
      );
      setFilteredEvents(filtered);
    }
    setVisibleCount(6);
  };
  const handleViewMore = () => {
    setVisibleCount((prev) => prev + 6);
  };
  const handleCardClick = (event) => {
    setPopupEvent(event);
  };
  const closePopup = () => {
    setPopupEvent(null);
  };
  return (
    <div className="max-w-5xl mx-auto px-4 py-8 relative">
      <div className="flex flex-wrap gap-2 justify-center mb-6">
        {["all", "Plantation", "Annual", "Sports", "NCC", "Science", "Alumni", "Cleanliness"].map((category) => (
          <button key={category} className={`px-4 py-2 text-sm rounded-full border ${selectedCategory === category ? "bg-blue-500 text-white" : "border-gray-300"}`} onClick={() => handleFilter(category)}>{category}</button>
        ))}
      </div>
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {filteredEvents.slice(0, visibleCount).map((event) => (
          <div key={event.id} className="bg-white shadow-lg rounded-lg overflow-hidden cursor-pointer" onClick={() => handleCardClick(event)}>
            <img src={`http://localhost:1337${event.image?.[0]?.formats?.url || event.image?.[0]?.url}`} alt={event.title} className="w-full h-48 object-cover"/>
            <div className="p-4">
              <h3 className="font-bold text-lg">{event.title}</h3>
              <p className="text-gray-500 text-sm flex gap-4">
                <img src="http://localhost:1337/uploads/date_Icon_a389406ea8.png" alt="date icon" className="w-5 h-5 object-cover"/>
                {new Date(event.date).toDateString()}
              </p>
            </div>
          </div>
        ))}
      </div>
      {visibleCount < filteredEvents.length && (
        <div className="text-center mt-6">
          <button onClick={handleViewMore} className="px-6 py-2 text-sm font-semibold text-red-500 border border-red-500 rounded-lg">View More</button>
        </div>
      )}
      {popupEvent && (
        <div className="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm" onClick={closePopup}>
          <div className="bg-white p-6 rounded-lg shadow-lg max-w-lg w-full relative" onClick={(e) => e.stopPropagation()}>
            <button className="absolute top-2 right-2 text-gray-500 hover:text-black" onClick={closePopup}>&times;</button>
            <img src={`http://localhost:1337${popupEvent.image?.[0]?.formats?.url || popupEvent.image?.[0]?.url}`} alt={popupEvent.title} className="w-full h-56 object-cover rounded-md"/>
            <h3 className="font-bold text-xl mt-4">{popupEvent.title}</h3>
            <p className="text-gray-500 text-sm mt-2">{new Date(popupEvent.date).toDateString()}</p>
            <p className="text-gray-700 mt-4">{popupEvent.description}</p>
          </div>
        </div>
      )}
    </div>
  );
};
export default EventsCard;
