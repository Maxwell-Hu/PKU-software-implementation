﻿#pragma checksum "E:\UWP\App5\App5\SettingPage.xaml" "{406ea660-64cf-4c82-b6f0-42d48172a799}" "7745260C845287E5DFA26D22E059C743"
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by a tool.
//
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace App5
{
    partial class SettingPage : 
        global::Windows.UI.Xaml.Controls.Page, 
        global::Windows.UI.Xaml.Markup.IComponentConnector,
        global::Windows.UI.Xaml.Markup.IComponentConnector2
    {
        /// <summary>
        /// Connect()
        /// </summary>
        [global::System.CodeDom.Compiler.GeneratedCodeAttribute("Microsoft.Windows.UI.Xaml.Build.Tasks"," 10.0.17.0")]
        [global::System.Diagnostics.DebuggerNonUserCodeAttribute()]
        public void Connect(int connectionId, object target)
        {
            switch(connectionId)
            {
            case 2: // SettingPage.xaml line 12
                {
                    this.ViewModel = (global::App5.Models.SettingPageModel)(target);
                }
                break;
            case 3: // SettingPage.xaml line 16
                {
                    this.MyPivot = (global::Windows.UI.Xaml.Controls.Pivot)(target);
                }
                break;
            case 4: // SettingPage.xaml line 52
                {
                    this.LogoImage = (global::Windows.UI.Xaml.Controls.Border)(target);
                }
                break;
            case 5: // SettingPage.xaml line 68
                {
                    this.DisplayNameTextBlock = (global::Windows.UI.Xaml.Controls.TextBlock)(target);
                }
                break;
            case 6: // SettingPage.xaml line 76
                {
                    this.PublisherTextBlock = (global::Windows.UI.Xaml.Controls.TextBlock)(target);
                }
                break;
            case 7: // SettingPage.xaml line 81
                {
                    this.VersionTextBlock = (global::Windows.UI.Xaml.Controls.TextBlock)(target);
                }
                break;
            case 8: // SettingPage.xaml line 28
                {
                    this.UseLightThemeToggleSwitch = (global::Windows.UI.Xaml.Controls.ToggleSwitch)(target);
                    ((global::Windows.UI.Xaml.Controls.ToggleSwitch)this.UseLightThemeToggleSwitch).Toggled += this.UseLightThemeToggleSwitch_Toggled;
                }
                break;
            default:
                break;
            }
            this._contentLoaded = true;
        }

        /// <summary>
        /// GetBindingConnector(int connectionId, object target)
        /// </summary>
        [global::System.CodeDom.Compiler.GeneratedCodeAttribute("Microsoft.Windows.UI.Xaml.Build.Tasks"," 10.0.17.0")]
        [global::System.Diagnostics.DebuggerNonUserCodeAttribute()]
        public global::Windows.UI.Xaml.Markup.IComponentConnector GetBindingConnector(int connectionId, object target)
        {
            global::Windows.UI.Xaml.Markup.IComponentConnector returnValue = null;
            return returnValue;
        }
    }
}

