import Navbar from "./components/Navbar/Navbar";
import EventGallery from "./components/EventGallary/EventGallery";
import EventsCard from "./components/EventsCard/EventsCard"
import Footer from "./components/Footer/Footer"
export default function Home() {
  return (
    <>
      <Navbar />
      <EventGallery />
      <EventsCard />
      <Footer />
    </>
  );
}
