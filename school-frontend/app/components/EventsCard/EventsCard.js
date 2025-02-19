"use client";
import { useState, useEffect } from "react";
const EventsCard = () => {
  const [events, setEvents] = useState([]); 
  const [filteredEvents, setFilteredEvents] = useState([]);
  const [visibleCount, setVisibleCount] = useState(6);
  const [selectedCategory, setSelectedCategory] = useState("all");
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
      const filtered = events.filter((event) => 
        event?.description?.trim()?.toLowerCase() === category.toLowerCase()
      );
      setFilteredEvents(filtered);
    }
    setVisibleCount(6);
  };
  const handleViewMore = () => {
    setVisibleCount((prev) => prev + 6);
  };
  return (
    <div className="max-w-5xl mx-auto px-4 py-8">
      <div className="flex flex-wrap gap-2 justify-center mb-6">
        {["all", "Plantation", "Annual", "Sports", "NCC", "Science", "Alumni", "Cleanliness"].map((category) => (
          <button key={category} className={`px-4 py-2 text-sm rounded-full border ${selectedCategory === category ? "bg-blue-500 text-white" : "border-gray-300"}`} onClick={() => handleFilter(category)}>{category}</button>
        ))}
      </div>
      <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        {filteredEvents.slice(0, visibleCount).map((event) => (
          <div key={event.id} className="bg-white shadow-lg rounded-lg overflow-hidden">
            <img src={`http://localhost:1337${event.image?.[0]?.formats?.url || event.image?.[0]?.url}`} alt={event.title} className="w-full h-48 object-cover"/>
            <div className="p-4">
              <h3 className="font-bold text-lg">{event.title}</h3>
              <p className="text-gray-500 text-sm flex gap-4">
                <img src="http://localhost:1337/uploads/date_Icon_a389406ea8.png" alt="date icon" className="w-5 h-5 object-cover"/> {new Date(event.date).toDateString()} </p>
            </div>
          </div>
        ))}
      </div>      
      {visibleCount < filteredEvents.length && (
        <div className="text-center mt-6">
          <button onClick={handleViewMore} className="px-6 py-2 text-sm font-semibold text-red-500 border border-red-500 rounded-lg">View More</button>
        </div>
      )}
    </div>
  );
};
export default EventsCard;
