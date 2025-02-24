import apiClient from "./apiClient";

export const getCategories = async () => {
  try {
    const response = await apiClient.get("/categories");
    return response.data.data;
  } catch (error) {
    console.error("Error fetching categories:", error);
    return [];
  }
};
