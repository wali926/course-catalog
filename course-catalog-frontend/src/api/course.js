import apiClient from "./apiClient";

export const getCourses = async () => {
  try {
    const response = await apiClient.get("/courses");
    return response.data.data;
  } catch (error) {
    console.error("Error fetching courses:", error);
    return [];
  }
};

export const getCoursesByCategory = async (categoryId) => {
  try {
    const response = await apiClient.get(`/courses/category/${categoryId}`);
    return response.data.data;
  } catch (error) {
    console.error("Error fetching courses by category:", error);
    return [];
  }
};
