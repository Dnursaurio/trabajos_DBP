using System;
using Xamarin.Forms;
using System.Text;

namespace formulario_a_cv_con_xamarin
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        // Evento para agregar habilidad
        private void OnAddHabilidadClicked(object sender, EventArgs e)
        {
            if (!string.IsNullOrWhiteSpace(HabilidadEntry.Text))
            {
                Entry newEntry = new Entry
                {
                    Placeholder = "Ingrese otra habilidad",
                    FontSize = 8,
                    Margin = new Thickness(10, 5)
                };
                HabilidadesStack.Children.Add(newEntry);
                HabilidadEntry.Text = string.Empty;
            }
            else
            {
                DisplayAlert("Error", "Por favor ingrese una habilidad antes de agregarla.", "OK");
            }
        }

        // Evento para agregar interés
        private void OnAddInteresClicked(object sender, EventArgs e)
        {
            if (!string.IsNullOrWhiteSpace(InteresEntry.Text))
            {
                Entry newEntry = new Entry
                {
                    Placeholder = "Ingrese otro interés",
                    FontSize = 8,
                    Margin = new Thickness(10, 5)
                };
                InteresesStack.Children.Add(newEntry);
                InteresEntry.Text = string.Empty;
            }
        }

        // Evento para imprimir los datos
        private void OnPrintClicked(object sender, EventArgs e)
        {
            StringBuilder resultado = new StringBuilder();

            // Recopilar los datos de contacto
            resultado.AppendLine("CONTACTO:");
            resultado.AppendLine($"Teléfono: {TelefonoEntry.Text}");
            resultado.AppendLine($"Correo electrónico: {CorreoEntry.Text}");
            resultado.AppendLine($"Dirección: {DireccionEntry.Text}");
            resultado.AppendLine();

            // Recopilar los idiomas seleccionados
            resultado.AppendLine("IDIOMAS:");
            if (EspañolCheckbox.IsChecked) resultado.AppendLine("- Español");
            if (InglesCheckbox.IsChecked) resultado.AppendLine("- Inglés");
            if (FrancesCheckbox.IsChecked) resultado.AppendLine("- Francés");
            if (AlemanCheckbox.IsChecked) resultado.AppendLine("- Alemán");
            resultado.AppendLine();

            // Recopilar las aptitudes seleccionadas
            resultado.AppendLine("APTITUDES:");
            if (LiderazgoCheckbox.IsChecked) resultado.AppendLine("- Liderazgo");
            if (TrabajoEquipoCheckbox.IsChecked) resultado.AppendLine("- Trabajo en equipo");
            if (CreatividadCheckbox.IsChecked) resultado.AppendLine("- Creatividad");
            if (AdaptabilidadCheckbox.IsChecked) resultado.AppendLine("- Adaptabilidad");
            resultado.AppendLine();

            // Recopilar las habilidades ingresadas
            resultado.AppendLine("HABILIDADES:");
            foreach (var child in HabilidadesStack.Children)
            {
                if (child is Entry entry && !string.IsNullOrWhiteSpace(entry.Text))
                {
                    resultado.AppendLine($"- {entry.Text}");
                }
            }
            resultado.AppendLine();

            // Recopilar los intereses ingresados
            resultado.AppendLine("OTROS INTERESES:");
            foreach (var child in InteresesStack.Children)
            {
                if (child is Entry entry && !string.IsNullOrWhiteSpace(entry.Text))
                {
                    resultado.AppendLine($"- {entry.Text}");
                }
            }

            // Mostrar los resultados en una alerta
            DisplayAlert("Datos Ingresados", resultado.ToString(), "OK");
        }
    }
}
