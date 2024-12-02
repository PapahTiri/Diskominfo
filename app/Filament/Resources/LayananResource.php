<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Layanan;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LayananResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LayananResource\RelationManagers;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;

class LayananResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationIcon = 'heroicon-o-swatch';

    protected static ?string $navigationLabel = 'Layanan';

    protected static ?string $pluralLabel = 'Layanan';

    protected static ?string $slug = 'layanan';

    protected static ?string $navigationGroup = 'Kelola Layanan';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_layanan')
                    ->required(),
                TextInput::make('link_akses'),
                Textarea::make('deskripsi')
                    ->required(),
                Textarea::make('syarat_mekanisme'),
                FileUpload::make('file_dokumen')
                    ->directory('uploads/layanan')
                    ->acceptedFileTypes(['application/pdf'])
                    ->preserveFilenames(),
                Select::make('id_kategori')
                    ->relationship('kategoriLayanan', 'nama_kategori')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_layanan'),
                TextColumn::make('deskripsi')->limit(15),
                TextColumn::make('link_akses'),
                TextColumn::make('syarat_mekanisme')->limit(15),
                TextColumn::make('kategoriLayanan.nama_kategori'),
                TextColumn::make('file_dokumen')
                    ->url(fn(Layanan $record) => asset('storage/uploads/layanan/' . $record->file_dokumen))
                    ->openUrlInNewTab(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLayanans::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any'
        ];
    }
}
