import { useEffect, useState } from "react";
import { getCategories } from "./api/category";
import { getCourses, getCoursesByCategory } from "./api/course";
import "./styles/App.css";

function App() {
  const [categories, setCategories] = useState([]);
  const [courses, setCourses] = useState([]);
  const [selectedCategory, setSelectedCategory] = useState("all");
  const [categoryName, setCategoryName] = useState("All Courses");
  const [allCoursesCount, setAllCoursesCount] = useState(0);

  useEffect(() => {
    fetchCategories();
    fetchCourses();
  }, []);

  const fetchCategories = async () => {
    const data = await getCategories();
    setCategories(data);
  };

  const fetchCourses = async () => {
    const data = await getCourses();
    setCourses(data);
    setAllCoursesCount(data.length);
    setSelectedCategory("all");
  };

  const filterCourses = async (id, name) => {
    if (id === "all") {
      fetchCourses();
      setCategoryName("All Courses");
    } else {
      const data = await getCoursesByCategory(id);
      setCourses(data);
      setCategoryName(name);
      setSelectedCategory(id);
    }
  };

  return (
    <div className="container mt-4">
      <h1 className="text-center mb-4">Course Catalog</h1>
      <div className="row">
        {/* Sidebar */}
        <div className="col-md-3">
          <h4 className="mb-3">Categories</h4>
          <ul className="list-group">
            <li
              className={`list-group-item ${selectedCategory === "all" ? "active" : ""}`}
              onClick={() => filterCourses("all")}
              style={{ cursor: "pointer" }}
            >
              All ({allCoursesCount})
            </li>
            {categories.map((cat) => (
              <li
                key={cat.id}
                className={`list-group-item ${selectedCategory === cat?.id ? "active" : ""}`}
                onClick={() => filterCourses(cat?.id, cat.name)}
                style={{ cursor: "pointer" }}
              >
                {cat.name} ({cat.courses_count})
              </li>
            ))}
          </ul>
        </div>

        {/* Courses Section */}
        <div className="col-md-9">
          <h4 className="mb-3">{categoryName}</h4>
          <div className="row">
            {courses.length > 0 ? (
              courses.map((course) => (
                <div key={course.id} className="col-md-4 mb-4">
                  <div className="card">
                    <img src={course.image_preview} className="card-img-top" alt={course.title} />
                    <div className="card-body">
                      <h5 className="card-title">{course.title}</h5>
                      <p className="card-text">{course.description}</p>
                      <span className="badge bg-primary">{course?.category?.name}</span>
                    </div>
                  </div>
                </div>
              ))
            ) : (
              <div className="card">
                <div className="card-body">
                  <h2 className="card-title text-danger">{categoryName} doesn't have any courses!</h2>
                </div>
              </div>
            )}
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
