import { FaTwitter, FaLinkedin, FaInstagram, FaFacebook, FaYoutube } from "react-icons/fa";
const Footer = () => {
  return (
    <footer className="bg-gray-100 py-10 text-gray-800 px-8">
      <div className="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
        <div className="flex items-center gap-8">
            <span>
                <img src="http://localhost:1337/uploads/IMG_20230420_WA_0000_removebg_preview_1_822872d8a0.png" alt="School Logo" className="w-50 mb-3" />
            </span>
            <span>
                <h2 className="text-lg font-semibold">DBTR National Higher Secondary School</h2>
                <p className="text-blue-500 font-semibold">Virtuousness Is Life</p>
                <p className="text-gray-600 text-sm mt-2 leading-relaxed">Established in 1901, DBTR is situated in the temple town of Mayiladuthurai.</p>
            </span>
        </div>
        <div className="grid grid-cols-2 gap-10">
          <div>
            <h3 className="text-lg font-semibold mb-3">QUICK LINKS</h3>
            <ul className="space-y-2 text-gray-700">
              <li><a href="#" className="hover:text-blue-500">Admissions</a></li>
              <li><a href="#" className="hover:text-blue-500">Alumni Association</a></li>
              <li><a href="#" className="hover:text-blue-500">Donate</a></li>
              <li><a href="#" className="hover:text-blue-500">Events</a></li>
            </ul>
          </div>          
          <div>
            <h3 className="text-lg font-semibold mb-3">CONTACT</h3>
            <p className="text-gray-700 text-sm leading-relaxed">DBTR NHSS, Mahadhana Street, Kamarajar Salai, Mayiladuthurai, Tamilnadu - 609001</p>
            <p className="text-gray-700 mt-2 text-sm">+91.436.422.3272</p>
            <p className="text-blue-500 font-semibold text-sm mt-1">contact@nationalhighschool.in</p>
          </div>
        </div>
        <div className="flex flex-col justify-center items-center text-center">
          <p className="text-gray-700 text-sm mb-2">Big or small, you can make an impact.</p>
          <button className="bg-red-500 text-white px-6 py-2 rounded-md font-semibold shadow-md hover:bg-red-600">Donate</button>
        </div>
      </div>
      <div className="flex justify-between border-t border-gray-300 mt-8 pt-6 text-center text-gray-600 text-sm">
        <p className="flex flex-col text-left">
            <span>© DBTR 2023, All Rights Reserved | <a href="#" className="hover:text-blue-500">Sitemap</a></span>
            <span>Designed by <span className="text-[22px] text-gray-800">PEPPER S<span className="text-red-500">Q</span>UARE</span></span>
        </p>
        <div className="flex justify-center space-x-4 mt-4 text-gray-500">
          <FaTwitter className="hover:text-blue-400 cursor-pointer" size={18} />
          <FaLinkedin className="hover:text-blue-700 cursor-pointer" size={18} />
          <FaInstagram className="hover:text-pink-500 cursor-pointer" size={18} />
          <FaFacebook className="hover:text-blue-600 cursor-pointer" size={18} />
          <FaYoutube className="hover:text-red-500 cursor-pointer" size={18} />
        </div>
      </div>
    </footer>
  );
};

export default Footer;
